<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // データ項目
    protected $fillable = [
      'name',
      'kana',
      'tel',
      'email',
      'postcode',
      'address',
      'birthday',
      'gender',
      'memo'
    ];

    // 顧客情報検索スコープ
    public function scopeSearchCustomers($query, $input = null)
    {

      // dd($input); 

      // $inputがemptyでない場合、カタカナと電話番号で検索。最後に存在チェック。
      if(!empty($input)) {
        if(
          Customer::where('kana', 'like', $input . '%')
          ->orWhere('tel', 'like', $input . '%')
          ->exists()
          )
        {
          // 上記のデータが存在したら、クエリにwhere('kana', 'like', $input . '%')とorWhere('tel', 'like', $input . '%');を渡す。
          return $query->where('kana', 'like', $input . '%')
          ->orWhere('tel', 'like', $input . '%');
        }
      }
    }
}
