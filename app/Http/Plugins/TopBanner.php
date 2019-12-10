<?php

namespace App\Http\Plugins;

class TopBanner extends Plugin {

    public $label = 'Top banner';

    public $name = 'top_banner';

    public function __construct()
    {
        $this
            ->setField('Image', 'image', self::FIELD_TYPE_FILE, true)
            ->setField('Color', 'color', self::FIELD_TYPE_COLOR, true)
            ->setField('H4', 'h4', self::FIELD_TYPE_TEXT)
            ->setField('H1', 'h1', self::FIELD_TYPE_TEXT)
            ->setField('P', 'p', self::FIELD_TYPE_TEXT)
            ->setField('Url', 'url', self::FIELD_TYPE_TEXT);
    }

    public function view()
    {
        $values = [
            'h4' => 'Shop is fun',
            'h1' => 'Browse Our Premium Product',
            'p' => 'Us which over of signs divide dominion deep fill bring they\'re meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.',
            'img' => 'http://hubnail.loc/assets/images/hero-banner.png',
            'url' => 'http://hubnail.loc/assets/images/hero-banner.png',
        ];
        $h4 = $values["h4"] ? '<h4>' . $values["h4"] . ' </h4>' : '';
        $h1 = $values["h1"] ? '<h1>' . $values["h1"] . ' </h1>' : '';
        $p = $values["p"] ? '<p>' . $values["p"] . ' </p>' : '';
        $img = $values["img"] ? '<img src="' . $values["img"] . '" />' : '';
        $url = $values["url"] ? '<a class="button button-hero" href="' . $values["h4"] . '" >Browse Now</a>' : '';

        return '
        <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">' . $img . '</div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">' . $h1 . $h4 . $p . $url. '</div>
                </div>
            </div>
        </div>
    </section>
        ';
    }
}
