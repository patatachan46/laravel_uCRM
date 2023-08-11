<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // 電話番号のハイフン除去
        $tel = str_replace('-', '', $this->faker->phoneNumber);
        // 住所の郵便番号以降を取得
        $address = mb_substr($this->faker->address, 9);

        // ダミーデータ作成
        return [
          'name' => $this->faker->name,
          'kana' => $this->faker->kanaName,
          'tel' => $tel,
          'email' => $this->faker->email,
          'postcode' => $this->faker->postcode,
          'address' => $address,
          'birthday' => $this->faker->dateTime,
          'gender' => $this->faker->numberBetween(0, 2),
          'memo' => $this->faker->realText(50),
        ];
    }
}
