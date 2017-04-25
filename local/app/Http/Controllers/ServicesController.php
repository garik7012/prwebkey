<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return view('pages.services');
    }
    public function searchOptim() {
        return view('services.search-optimisation');
    }
        public function soAudit() {
            return view('services.so.audit');
        }
        public function soProdvigenie() {
            return view('services.so.prodvigenie');
        }
        public function soEducation() {
            return view('services.so.education');
        }

    public function reputation() {
        return view('services.reputation');
    }
        public function reputationSerm() {
            return view('services.reputation.serm');
        }
        public function reputationNegative() {
            return view('services.reputation.negative');
        }
        public function reputationMonitoring() {
            return view('services.reputation.monitoring');
        }

    public function kontekst() {
        return view('services.kontekst-reklama');
    }
        public function kontekstAdword() {
            return view('services.kontekst.adword');
        }
        public function kontekstAgregator() {
            return view('services.kontekst.agregator');
        }
        public function kontekstSoc() {
            return view('services.kontekst.soc');
        }
        public function kontekstTarget() {
            return view('services.kontekst.target');
        }


    public function smm() {
        return view('services.smm');
    }
        public function smmBlogers(){
            return view('services.smm.blogers');
        }
        public function smmVideo() {
            return view('services.smm.video');
        }
        public function smmWiki() {
            return view('services.smm.wiki');
        }

    public function copywriting() {
        return view('services.copywriting');
    }
        public function copywritingNapolnenie() {
            return view('services.copywriting.napolnenie');
        }
        public function copywritingPublic() {
            return view('services.copywriting.public');
        }
        public function copywritingReklam() {
            return view('services.copywriting.reklam');
        }

    public function lidogen() {
        return view('services.lidogen');
    }
        public function lidogenParsing() {
            return view('services.lidogen.parsing');
        }

    public function konsalting() {
        return view('services.konsalting');
    }
    public function videomaking() {
        return view('services.videomaking');
    }
        public function videomakingEtaps() {
            return view('services.videomaking.etaps');
        }
        public function videomakingPrice() {
            return view('services.videomaking.price');
        }

    public function smi() {
        return view('services.smi');
    }
        public function smiPublic(){
            return view('services.smi.public');
        }
        public function smiJurn(){
            return view('services.smi.jurn');
        }
        public function smiBlokir(){
            return view('services.smi.blokir');
        }

}
