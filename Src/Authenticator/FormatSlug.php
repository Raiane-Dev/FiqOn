<?php
    namespace Src\Authenticator;

    class FormatSlug{
        public static function format($slug){
            $slug = mb_strtolower($slug);
            $slug = preg_replace('/ã|á|â/', 'a', $slug);
            $slug = preg_replace('/é|è|ê/', 'e', $slug);
            $slug = preg_replace('/í|î|ì/', 'i', $slug);
            $slug = preg_replace('/ó|ô|õ|ò/', 'o', $slug);
            $slug = preg_replace('/ú|û|ù/', 'u', $slug);
            $slug = preg_replace('/ /', '-', $slug);
            $slug = preg_replace('/\?|\=/', '', $slug);
            return $slug;
        }
    }
?>