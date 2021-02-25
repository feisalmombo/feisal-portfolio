<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Carbon\Carbon;
use DB;
use Auth;

class TestimonialsController extends Controller
{
    protected $activeMenu = ['admin','testimonials'];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::All();
        $data['title'] = 'Testimonials';
        $data['testimonials'] = $testimonials;
        $data['active'] = $this->activeMenu;

        return view('admin.testimonials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonial = new Testimonial();
        $data['title'] = 'Add Testimonial';
        $data['testimonial'] = $testimonial;
        $data['active'] = $this->activeMenu;

        return view('admin.testimonials.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
            'occupation' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial = $this->updateData($testimonial, $request);

        return redirect('admin/testimonials/index')->with('message', 'Testimonial is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $data['title'] = 'Testimonial Details';
        $data['testimonial'] = $testimonial;
        $data['active'] = $this->activeMenu;

        return view('admin.testimonials.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data['title'] = 'Edit Testimonial';
        $data['testimonial'] = $testimonial;
        $data['active'] = $this->activeMenu;

        return view('admin.testimonials.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
            'occupation' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial = $this->updateData($testimonial, $request);

        return redirect(route('admin.testimonials.show', $testimonial->id))->with('message', 'Testimonial is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('message', 'Testimonial is successfully deleted');
    }

    public function updateData($testimonial, $request)
    {
        $testimonial->personal_name = $request->get('name');
        $testimonial->testimonial_description = $request->get('description');
        $testimonial->testimonial_image = $request->image->store('TestimonialImages', 'public');
        $testimonial->testimonial_occupation = $request->get('occupation');
        $testimonial->save();

        return $testimonial;
    }
}
