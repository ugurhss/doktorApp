<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\News;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loadDoctorBySpeciality($speciality_id){
        $id = $speciality_id;
        return view('user.doctor-by-speciality',compact('id'));
    }

    public function loadArticles(){
        return view('user.articles');
    }
    public function loadBookingPage($id){
        $doctor = Doctor::with('speciality','doctorUser')->where('id',$id)->first();
        return view('user.booking-page',compact('doctor'));
    }

    public function loadMyAppointments(){
        return view('user.my-appointments');
    }

    public function alldoctor(){
        $doctor = Doctor::with('speciality','doctorUser');
        return view('user.all-doctor',compact('doctor'));
    }

    public function reschedulingForm($id){
        $appointment_id = $id;
        return view('user.rescheduleform',compact('appointment_id'));
    }

    public function LiveConsultationPage(){
        return view("user.meeting");
    }

    public function __invoke(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Ana sayfaya yönlendir
    }

    public function newsList(){
        return view('user.news-list');
    }
    public function newsCreate(){
        return view('user.news-create');
    }

    public function show($slug)
    {
        // Slug ile haber verisini alıyoruz
        $news = News::where('slug', $slug)->firstOrFail();

        // Haber verisini ve kategoriyi detay sayfasına gönderiyoruz
        return view('news-show', compact('news'));
    }

    public function byMenu(Menu $menu)
    {
        // Menü ID'si Livewire bileşenine gönderiliyor
        return view('user.news-list', [
            'selectedMenuId' => $menu->id
        ]);
    }
}
