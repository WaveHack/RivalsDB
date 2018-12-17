<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Commander extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Commander::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Game';

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
        'unlocked_at_level',
        'commander_power_name',
        'commander_power_cost',
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

            Textarea::make('Flavor Description')
                ->hideFromIndex(),

            Select::make('Rarity')
                ->sortable()
                ->options([
                    'rare' => 'Rare',
                ])
                ->rules('required'),

            Number::make('Unlocked at level')
                ->sortable()
                ->rules('required', 'min:1', 'max:50'),

            Number::make('Base health')
                ->hideFromIndex()
                ->rules('required', 'min:0'),

            Number::make('Harvester health')
                ->hideFromIndex()
                ->rules('required', 'min:0'),

            Text::make('Commander power name')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Textarea::make('Commander power description')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Number::make('Commander power cost')
                ->hideFromIndex()
                ->rules('required', 'min:0'),
        ];
    }
}
