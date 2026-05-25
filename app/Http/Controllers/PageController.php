<?php

namespace App\Http\Controllers;

use App\ViewModels\PortfolioViewModel;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(PortfolioViewModel $vm): View
    {
        return view('pages.home', $vm->baseData('home'));
    }

    public function about(PortfolioViewModel $vm): View
    {
        return view('pages.about', $vm->baseData('about'));
    }

    public function services(PortfolioViewModel $vm): View
    {
        return view('pages.services', $vm->baseData('services'));
    }

    public function projects(PortfolioViewModel $vm): View
    {
        return view('pages.projects', $vm->baseData('projects'));
    }

    public function technologies(PortfolioViewModel $vm): View
    {
        return view('pages.technologies', $vm->baseData('technologies'));
    }

    public function contact(PortfolioViewModel $vm): View
    {
        return view('pages.contact', $vm->baseData('contact'));
    }

    public function faq(PortfolioViewModel $vm): View
    {
        return view('pages.faq', $vm->baseData('faq'));
    }

    public function testimonials(PortfolioViewModel $vm): View
    {
        return view('pages.testimonials', $vm->baseData('testimonials'));
    }

    public function history(PortfolioViewModel $vm): View
    {
        return view('pages.history', $vm->baseData('history'));
    }

    public function industries(PortfolioViewModel $vm): View
    {
        return view('pages.industries', $vm->baseData('industries'));
    }

    public function careers(PortfolioViewModel $vm): View
    {
        return view('pages.careers', $vm->baseData('careers'));
    }

    public function missionVision(PortfolioViewModel $vm): View
    {
        return view('pages.mission-vision', $vm->baseData('mission-vision'));
    }

    public function caseStudies(PortfolioViewModel $vm): View
    {
        return view('pages.case-studies', $vm->baseData('case-studies'));
    }
}
