<?php 

class template_class {
    private $values = array();
    public $html;

    public function get_templ($templ_path) {

        if (empty($templ_path) || !file_exists($templ_path)) {
            return false;
        } else {
            $this->html = file_get_contents($templ_path);

        }
    }

    public function set_values($key, $val) {
        $key = '{' . $key . '}';
        $this->values[$key] = $val;
    }

    public function templ_parse() {
        foreach ($this->values as $find => $replace) {
            $this->html = str_replace($find, $replace, $this->html);
        }
    }
}

