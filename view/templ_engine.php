<?php 

class template_class {
    var $values = array();
    var $html;

    function get_templ($lang) {
        if ($lang === 'kz') {
            $templ_name = 'templ/templ_kz.php';
        } else {
            $templ_name = 'templ/templ_ru.php';
        }

        if (empty($templ_name) || !file_exists($templ_name)) {
            echo "eror";
            return false;
        } else {
            $this->html = get_file_contents($templ_name);
            echo "It exists";
        }
    }

    function set_values($key, $val) {
        $key = '{' . $key . '}';
        $this->values[$key] = $val;
    }

    function templ_parse() {
        foreach ($this->values as $find => $replace) {
            $this->html = str_replace($find, $replace, $this->html);
        }
    }
}