<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Account;
use App\Models\Position;


class AccountsController extends Controller
{
    public function index(){
        return view('users.admin.accounts.accounts');
    }
    public function listAccount(){
        $accounts = Account::where('type', '!=', 2)
            ->join('positions', 'positions.positionID', '=', 'accounts.positionID')
            ->get();
        return response()->json($accounts);
    }
    public function addAccount(Request $request){

        $v = Validator::make($request->all(), [
            'email' => 'required|email|unique:accounts',
            'name' => 'required',
        ]);

        $response = array(
            'status'=>0,
            'error'=>array()
        );

        if ($v->fails()) {
            $response['status'] = 1;
            $response['errors'] = $v->errors();
        } else {
            $account = new Account;
            $account->fill($request->all());
            $account->positionID = $request->position;
            $account->type = 3;
            $account->password = bcrypt($request->email);
            $account->save();
        }
        return response()->json($response);
    }
    public function listPosition(Request $request){
        $positions = Position::where('status', 1)->get();
        return response()->json($positions);
    }
    public function deleteAccount(Request $request){
        $account = Account::where('accountID', $request->id);
        $account->delete();
        return response()->json('');
    }
}
