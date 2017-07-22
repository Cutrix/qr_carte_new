<?php

namespace Engine;

class GenMat {

    public static function gen_mat($lname, $cni, $fname) {
        $s1_left = rand(0, strlen($lname) - 1);
        $s2_left = rand(0, strlen($cni) - 1);
        $s3_left = rand(0, strlen($fname) - 1);

        $s1_right = rand(2, strlen($lname));
        $s2_right = rand(4, strlen($cni));
        $s3_right = rand(2, strlen($fname));

        $s1 = substr($lname, $s1_left, $s1_right);
        $s2 = substr($cni, $s2_left, $s2_right);
        $s3 = substr($fname, $s3_left, $s3_right);
        return uniqid() . $s1 . uniqid() . $s2 . uniqid() . $s3; 
    }

}
