<?php
  
namespace App\Rules;
  
use Illuminate\Contracts\Validation\Rule;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
  
class MatchOldPassword implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Auth::check($value, auth()->user()->password);
    }
   
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not match with old password. If you really forget it Contact to our Support(support@refundments.com) ';
    }
}