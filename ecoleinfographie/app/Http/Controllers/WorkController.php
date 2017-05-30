<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Work;
use Illuminate\Http\Request;
use SEO;
use Share;


class WorkController extends Controller
{
    public function index(Request $request)
    {
        SEO::setTitle('Les travaux de nos étudiants');
        SEO::setDescription('Découvres les travaux que nos étudiants réalisent chaque année au cours de leur formation');
        
        $query = Work::inRandomOrder();
        
        if ($request->has('orientation')) {
            $query->where('orientation', $request->get('orientation'));
        }
        
        $works = $query->paginate(11);
        
        if ($request->ajax()) {
            return [
                'works'     => view('partials.realisations.item-realisations',
                    [
                        'works'        => $works,
                        'orientations' => $this->getOrientation()
                    ])->render(),
                'next_page' => $works->nextPageUrl() . $this->getLoadMoreLink($request),
            ];
        }
        
        return view('pages.realisations', [
            'works'           => $works,
            'orientations'    => $this->getOrientation(),
            'getLoadMoreLink' => $this->getLoadMoreLink($request)
        ]);
    }
    
    public function show(Work $work)
    {
        SEO::setTitle($work->title);
        $description = $work->title . ', une réalisation dans le cadre de la formation dispensée à la Haute École de la Province de Liège';
        SEO::setDescription($description);
    
        SEO::OpenGraph()->addProperty('type', 'article');
        SEO::OpenGraph()->addImage($work->image, ['width' => \Image::make($work->image)->width(), 'height' => \Image::make($work->image)->height()]);
        
        $type = Type::with('works')->get();
        
        return view('posts.postWork', [
            'work'         => $work,
            'orientations' => $this->getOrientation(),
            'get3dWork'    => $this->get3dWork($work->id),
            'get2dWork'    => $this->get2dWork($work->id),
            'getWebWork'   => $this->getWebWork($work->id),
            'getType'      => $type
        ]);
    }
    
    public function filter(Request $request)
    {
        SEO::setTitle('Les travaux de nos étudiants');
        SEO::setDescription('Découvres les travaux que nos étudiants réalisent chaque année au cours de leur formation');
        
        $query = Work::inRandomOrder();
        
        if ($request->has('year')) {
            $query->where('year', $request->get('year'));
        } elseif ($request->has('type')) {
            $query->whereHas('type', function ($query) use ($request) {
                $query->where('slug', $request->get('type'));
            });
        } elseif ($request->has('skill')) {
            $query->whereHas('skills', function ($query) use ($request) {
                $query->where('slug', $request->get('skill'));
            });
        } elseif ($request->has('orientation')) {
            $query->where('orientation', $request->get('orientation'));
        } elseif ($request->has('author')) {
            $query->whereHas('students', function ($query) use ($request) {
                $query->where('slug', $request->get('author'));
            });
        }
        
        $works = $query->paginate(11);
        
        if ($request->ajax()) {
            return [
                'works'     => view('partials.realisations.item-realisations',
                    [
                        'works'        => $works,
                        'orientations' => $this->getOrientation()
                    ])->render(),
                'next_page' => $works->nextPageUrl() . $this->getLoadMoreLink($request),
            ];
        }
        
        return view('pages.realisations-filter', [
            'works'           => $works,
            'orientations'    => $this->getOrientation(),
            'getLoadMoreLink' => $this->getLoadMoreLink($request)
        ]);
    }
    
    public function getOrientation()
    {
        $orientations = [
            '2D'  => trans('programCourse.2D'),
            '3D'  => trans('programCourse.3D'),
            'web' => trans('programCourse.web')
        ];
        
        return $orientations;
    }
    
    public function getLoadMoreLink(Request $request)
    {
        if ($request->has('orientation')) {
            return '&orientation=' . $request->get('orientation');
        } else if ($request->has('year')) {
            return '&year=' . $request->get('year');
        } else if ($request->has('type')) {
            return '&type=' . $request->get('type');
        } else if ($request->has('skill')) {
            return '&skill=' . $request->get('skill');
        }
    }
    
    public function get3dWork($id)
    {
        $workFrom3D = Work::whereNotIn('id', [$id])->where('orientation', '3D')->inRandomOrder()->limit(1)->first();
        
        return $workFrom3D;
    }
    
    public function get2dWork($id)
    {
        $workFrom2D = Work::whereNotIn('id', [$id])->where('orientation', '2D')->inRandomOrder()->limit(1)->first();
        
        return $workFrom2D;
    }
    
    public function getWebWork($id)
    {
        $workFromWeb = Work::whereNotIn('id', [$id])->where('orientation', 'web')->inRandomOrder()->limit(1)->first();
        
        return $workFromWeb;
    }
}
