<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
        public function auth(Request $f){
        $username=$f->txtUsername;
        $password=$f->txtPassword;
		
         $px=DB::getTablePrefix();
       $u=DB::select("select u.id,u.username,u.full_name,u.email,u.role_id,r.name role_name from {$px}users u,{$px}roles r  where r.id=u.role_id and (u.username='$username' or u.email='$username' or u.full_name='$username') and u.password='$password'");   
      
       if(count($u)==1){             

          $session_id=session()->getId();  
          
          session(['sess_id'=>$session_id,
                   'sess_user_id'=>$u[0]->id,
                   'sess_user_name' =>$u[0]->username,
                   'sess_full_name' =>$u[0]->full_name,
                   'sess_email'=>$u[0]->email,
                   'sess_role_id'=>$u[0]->role_id,
                   'sess_role_name'=>$u[0]->role_name
                   ]); 
                         
         
          return Redirect::route('home');

      }else{
        return redirect("/");
       //  echo "Username or Password is incorrect";  
      }
        
       // return Redirect::route('home');
     }



     public function logout(){
        session()->forget(['sess_id', 'sess_user_id','sess_user_name','sess_email','sess_role_name']);
        session()->flush();
        session()->regenerate();  
        return redirect("/");    
      }
}
