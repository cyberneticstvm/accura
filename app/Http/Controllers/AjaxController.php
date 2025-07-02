<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function getProduct(int $id)
    {
        $op = "";
        if ($id == 1):
            $op .= "<a href='" . route('index') . "'><img alt='Accura Digi Pro Standard' src=" . asset('/assets/img/products/1.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura Digi Pro Standard</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Progressive lens made with freeform technology</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Ideal for first time progressive lens users</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Smooth progressive view of near, intermediate and far</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Easy change of focus from far to near</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Vision clarity & comfort</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Clearer vision at all distances</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Easy adaption</li>";
            $op .= "</ul>";
        endif;
        if ($id == 2):
            $op .= "<a href='" . route('index') . "'><img alt='Accura DigiPro Digital' src=" . asset('/assets/img/products/2.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura DigiPro Digital</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Standard universal freeform progressive design</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Ideal balanced view of near, intermediate and far</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Smooth progressive view of near, intermediate and far</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Offers better fields of vision</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Easy adaption and comfort of use</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Performance optimised</li>";
            $op .= "</ul>";
        endif;
        if ($id == 3):
            $op .= "<a href='" . route('index') . "'><img alt='Accura DigiPro Signature' src=" . asset('/assets/img/products/3.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura DigiPro Signature</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Customised enhanced intermediate zone of 50%and 70%</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Excellent intermediate field of vision with wide near</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Minimal distortion in side to side viewing</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Higher the pixel higher the resolution</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Better balance between left and right eye</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Highly refined progression to deliver excellent smoothness of vision</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Ergonomic design excellence</li>";
            $op .= "</ul>";
        endif;
        if ($id == 4):
            $op .= "<a href='" . route('index') . "'><img alt='EazyFit Benefits' src=" . asset('/assets/img/products/4.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>EazyFit Benefits</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Superior Vision at all distance.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Easy Adaption.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Performance Optimised.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Smooth Transition from Far to Near.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Low Astigmatism Provides Visiual Comfort.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>The Standard Progressive Lens using Free Form Production.</li>";
            $op .= "</ul>";
        endif;
        if ($id == 5):
            $op .= "<a href='" . route('index') . "'><img alt='Accura Smart Tech HD' src=" . asset('/assets/img/products/5.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura Smart Tech HD</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Freedom to change the design according to patient requirements for intermediate.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Intermediate zone in increase up to 30%/50%/70%.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Complete optimization (personalization parameters are taking in to account).</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Great visual comfort.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Real trifocal design in modern digital surfacing technology.</li>";
            $op .= "</ul>";
        endif;
        if ($id == 6):
            $op .= "<a href='" . route('index') . "'><img alt='Accura EyeLux HD' src=" . asset('/assets/img/products/6.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura EyeLux HD</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Ideal Interaction between Far, Intermediate & Near Vision.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Very High Rate of Spontaneous Accommodation.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Oblique Astigmatism Minimise.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Great Visual Comfort.</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Optimum Vision Quality in High Prescription.</li>";
            $op .= "</ul>";
        endif;
        if ($id == 7):
            $op .= "<a href='" . route('index') . "'><img alt='Accura Variview' src=" . asset('/assets/img/products/7.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura Variview</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i></li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Specialised design for your daily activity</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Wider reading zone and comfortable intermediate</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Extra sharp vision and minimal distortion</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Reduced unpleasant swim effect</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Minimum oblique astigmatism</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Improved performance suited for today's digital environment</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Enhanced vision comfort</li>";
            $op .= "</ul>";
        endif;
        if ($id == 8):
            $op .= "<a href='" . route('index') . "'><img alt='Accura Allecta HD' src=" . asset('/assets/img/products/8.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accura Allecta HD</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Highly balanced near and far fields of vision</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Significant reduction of up to 30% unwanted astigmatism enabled to eliminate swim effect</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Optimised progression distribution according to real frame shape</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Comfortable vision while using handheld devices in today’s digital environment</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Enabled lightness of lens</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Accelerated adaptation</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Improved vision in all gaze directions</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Superior ergonomic design and aesthetics</li>";
            $op .= "</ul>";
        endif;
        if ($id == 9):
            $op .= "<a href='" . route('index') . "'><img alt='Accutter HD' src=" . asset('/assets/img/products/9.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accutter HD</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Completely personalised progressive lenses that considers the real position of the user</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Widest intermediate visual field with effective natural near and far vision</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Significant reduction of up to 50% unwanted astigmatism enabled to eliminate swim effect</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Limitless visual perception</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Excellence in visual comfort</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Optimised progression distribution according to real frame shape</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Sharp vision at all distances</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Enabled lightness of lens</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Accelerated adaptation</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Improved vision in all gaze directions</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Superior ergonomic design and aesthetics</li>";
            $op .= "</ul>";
        endif;
        if ($id == 10):
            $op .= "<a href='" . route('index') . "'><img alt='Accusport Polarized' src=" . asset('/assets/img/products/10.svg') . " width='100%'></a>";
            $op .= "<h4 class='text-color-dark text-4 mt-3 text-center'>Accusport Polarized</h4>";
            $op .= "<ul class='list list-icons font-weight-semibold text-color-dark text-2-5'>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Specially designed for sports activities and an active way of life</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Perfect combination of performance and protection</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Sharp, wide fields of vision even in challenging weather conditions</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>The right ally for night drive vision</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Available in polarised and in attractive colour vision range</li>";
            $op .= "<li><i class='icon-arrow-right icons text-color-tertiary top-7'></i>Classy outdoor lenses with glamorous look</li>";
            $op .= "</ul>";
        endif;
        echo $op;
    }
}
