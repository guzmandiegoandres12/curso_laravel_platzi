<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseReport extends Model
{
   public  function expenses()
   {
      return $this->HasMany(Expense::class);
   }
}
