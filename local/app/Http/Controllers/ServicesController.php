<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class ServicesController extends Controller
{
    public function index() {
        $pageseo = Page::where('link', '/services')->get();
        return view('pages.services', ['pageseo' => $pageseo[0]]);
    }
    public function searchOptim() {
        $pageseo = Page::where('link', '/services/search-optimisation')->get();
        return view('services.search-optimisation', ['pageseo' => $pageseo[0]]);
    }
        public function soAudit() {
            $pageseo = Page::where('link', '/services/search-optimisation/audit')->get();
            return view('services.so.audit', ['pageseo' => $pageseo[0]]);
        }
        public function soProdvigenie() {
            $pageseo = Page::where('link', '/services/search-optimisation/prodvigenie')->get();
            return view('services.so.prodvigenie', ['pageseo' => $pageseo[0]]);
        }
        public function soEducation() {
            $pageseo = Page::where('link', '/services/search-optimisation/education')->get();
            return view('services.so.education', ['pageseo' => $pageseo[0]]);
        }

    public function reputation() {
        $pageseo = Page::where('link', '/services/reputation')->get();
        return view('services.reputation', ['pageseo' => $pageseo[0]]);
    }
        public function reputationSerm() {
            $pageseo = Page::where('link', '/services/reputation/serm')->get();
            return view('services.reputation.serm', ['pageseo' => $pageseo[0]]);
        }
        public function reputationNegative() {
            $pageseo = Page::where('link', '/services/reputation/negative')->get();
            return view('services.reputation.negative', ['pageseo' => $pageseo[0]]);
        }
        public function reputationMonitoring() {
            $pageseo = Page::where('link', '/services/reputation/monitoring')->get();
            return view('services.reputation.monitoring', ['pageseo' => $pageseo[0]]);
        }

    public function internet() {
        $pageseo = Page::where('link', '/services/internet-reklama')->get();
        return view('services.internet-reklama', ['pageseo' => $pageseo[0]]);
    }
        public function kontekstAdword() {
            $pageseo = Page::where('link', '/services/internet-reklama/kontekst')->get();
            return view('services.internet.adword', ['pageseo' => $pageseo[0]]);
        }
        public function kontekstAgregator() {
            $pageseo = Page::where('link', '/services')->get();
            return view('services.internet.agregator', ['pageseo' => $pageseo[0]]);
        }
        public function kontekstSoc() {
            $pageseo = Page::where('link', '/services/internet-reklama/soc')->get();
            return view('services.internet.soc', ['pageseo' => $pageseo[0]]);
        }
        public function kontekstTarget() {
            $pageseo = Page::where('link', '/services/internet-reklama/target')->get();
            return view('services.internet.target', ['pageseo' => $pageseo[0]]);
        }


    public function smm() {
        $pageseo = Page::where('link', '/services/smm')->get();
        return view('services.smm', ['pageseo' => $pageseo[0]]);
    }
        public function smmBlogers(){
            $pageseo = Page::where('link', '/services/smm/blogers')->get();
            return view('services.smm.blogers', ['pageseo' => $pageseo[0]]);
        }
        public function smmVideo() {
            $pageseo = Page::where('link', '/services/smm/video')->get();
            return view('services.smm.video', ['pageseo' => $pageseo[0]]);
        }
        public function smmWiki() {
            $pageseo = Page::where('link', '/services/smm/wiki')->get();
            return view('services.smm.wiki', ['pageseo' => $pageseo[0]]);
        }

    public function copywriting() {
        $pageseo = Page::where('link', '/services/copywriting')->get();
        return view('services.copywriting', ['pageseo' => $pageseo[0]]);
    }
        public function copywritingNapolnenie() {
            $pageseo = Page::where('link', '/services/copywriting/napolnenie')->get();
            return view('services.copywriting.napolnenie', ['pageseo' => $pageseo[0]]);
        }
        public function copywritingPublic() {
            $pageseo = Page::where('link', '/services/copywriting/public')->get();
            return view('services.copywriting.public', ['pageseo' => $pageseo[0]]);
        }
        public function copywritingReklam() {
            $pageseo = Page::where('link', '/services/copywriting/reklam')->get();
            return view('services.copywriting.reklam', ['pageseo' => $pageseo[0]]);
        }

    public function lidogen() {
        $pageseo = Page::where('link', '/services/lidogen')->get();
        return view('services.lidogen', ['pageseo' => $pageseo[0]]);
    }
        public function lidogenParsing() {
            $pageseo = Page::where('link', '/services/lidogen/parsing')->get();
            return view('services.lidogen.parsing', ['pageseo' => $pageseo[0]]);
        }

    public function konsalting() {
        $pageseo = Page::where('link', '/services/konsalting')->get();
        return view('services.konsalting', ['pageseo' => $pageseo[0]]);
    }
        public function konsaltingModelirovanie() {
            $pageseo = Page::where('link', '/services/konsalting/modelirovanie')->get();
            return view('services.konsalting.modelirovanie', ['pageseo' => $pageseo[0]]);
        }
        public function konsaltingMonitoring() {
            $pageseo = Page::where('link', '/services/konsalting/monitoring')->get();
            return view('services.konsalting.monitoring', ['pageseo' => $pageseo[0]]);
        }
    public function videomaking() {
        $pageseo = Page::where('link', '/services/videomaking')->get();
        return view('services.videomaking', ['pageseo' => $pageseo[0]]);
    }
        public function videomakingEtaps() {
            $pageseo = Page::where('link', '/services/videomaking/etaps')->get();
            return view('services.videomaking.etaps', ['pageseo' => $pageseo[0]]);
        }
        public function videomakingPrice() {
            $pageseo = Page::where('link', '/services/videomaking/price')->get();
            return view('services.videomaking.price', ['pageseo' => $pageseo[0]]);
        }

    public function smi() {
        $pageseo = Page::where('link', '/services/smi')->get();
        return view('services.smi', ['pageseo' => $pageseo[0]]);
    }
        public function smiPublic(){
            $pageseo = Page::where('link', '/services/smi/public')->get();
            return view('services.smi.public', ['pageseo' => $pageseo[0]]);
        }
        public function smiJurn(){
            $pageseo = Page::where('link', '/services/smi/jurn')->get();
            return view('services.smi.jurn', ['pageseo' => $pageseo[0]]);
        }
        public function smiBlokir(){
            $pageseo = Page::where('link', '/services/smi/blokir')->get();
            return view('services.smi.blokir', ['pageseo' => $pageseo[0]]);
        }

}
