<?php

namespace Database\Factories;

use App\Models\Strategy;
use Illuminate\Database\Eloquent\Factories\Factory;

class StrategyFactory extends Factory {

    protected $model = Strategy::class;

    public function definition()
    : array {

        $strategyTypes = [
            'Long/Short Equity',
            'Equity Market Neutral',
            'Merger Arbitrage',
            'Global Macro',
            'Volatility Arbitrage'
        ];

        return [
            'type'   => $this->faker->randomElement($strategyTypes),
            'tenure' => $this->faker->numberBetween(1, 10),
            'yield'  => $this->faker->numberBetween(1, 10000) * 0.01,
            'relief' => $this->faker->numberBetween(1, 100) * 0.001
        ];
    }
}
