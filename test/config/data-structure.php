<?php

return function(BuilderInterface $builder)
{
    $tagName     = 'article_tag';
    $optionName = 'article_option';
    $articleName = 'article';

    $builder
        ->table($articleName, CharsetUtfFactory::create8mb4())
        ->fields()
            ->uuid()
            ->text('title', 150)
            ->slug('title')
            ->text('description', 500)
            ->longText('content')
            ->createdAt()
            ->updatedAt()
            ->hasMany($tagName)
        ->end()
    ;

    $builder
        ->table($tagName, [
            CharsetUtfFactory::create8mb4()
        ])
        ->fields()
            ->intId()
            ->text('name', 50)
            ->slug('slug')
            ->hasMany($optionName)
            ->hasMany($articleName)
        ->end()
    ;

    $builder
        ->table($optionName)
        ->fields()
            ->intId()
            ->text('name', 32)
            ->text('defaultValue', 120)
        ->end()
    ;
};
