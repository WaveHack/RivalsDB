<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Unit extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Unit::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'rarity',
        'type',
        'unlocked_at_level',
        'speed',
        'building',
        'cost',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Faction'),

            Text::make('Slug')
                ->onlyOnForms()
                ->rules('required', 'max:255'),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Textarea::make('Description')
                ->hideFromIndex(),

            Select::make('Rarity')
                ->sortable()
                ->options([
                    'common' => 'Common',
                    'rare' => 'Rare',
                    'epic' => 'Epic',
                ])
                ->rules('required'),

            Select::make('Type')
                ->sortable()
                ->options([
                    'infantry' => 'Infantry',
                    'vehicles' => 'Vehicles',
                    'aircraft' => 'Aircraft',
                ])
                ->rules('required'),

            Number::make('Unlocked at level')
                ->sortable()
                ->rules('required', 'min:1', 'max:50'),

            Number::make('Health')
                ->hideFromIndex()
                ->rules('required', 'min:0'),

            Number::make('Dps')
                ->hideFromIndex()
                ->rules('required', 'min:0'),

            Select::make('Speed')
                ->sortable()
                ->options([
                    'slowest' => 'Slowest',
                    'slow' => 'Slow',
                    'average' => 'Average',
                    'fast' => 'Fast',
                    'fastest' => 'Fastest',
                ])
                ->rules('required'),

            // todo make dynamic based on faction
            Select::make('Building')
                ->sortable()
                ->options([
                    'barracks',

//                    'barracks' => '',
//                    'hand of nod' => '',
//                    'war factory' => '',
//                    'helipad' => '',
//                    'air tower' => '',
//                    'tech lab' => '',
//                    'temple of nod' => '',
                ])
                ->rules('required'),

            Number::make('cost')
                ->sortable()
                ->rules('required', 'min:0'),

        ];
    }
}
