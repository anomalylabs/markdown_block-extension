<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyExtensionMarkdownBlockCreateMarkdownBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'content' => 'anomaly.field_type.markdown',
    ];

}
