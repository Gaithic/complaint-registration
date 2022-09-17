<?php namespace Netgen\Netgen\Components;

use Cms\Classes\ComponentBase;
use Validator;
use ValidationException;
use Flash;
use Input;
use \Netgen\Netgen\Models\Complaint;
use Symfony\Component\Console\Input\Input as InputInput;

class RegisterComplaint extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'RegisterComplaint Component',
            'description' => 'Register Complaint'
        ];
    }

    public function onRegister(){
        $data = post();
        
        $rules  = [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|min:10|max:10',
            'state_name' => 'required',
            'city' => 'required',
            'complaint_type' => 'required',
            'message' => 'required',
        ];

        $validation= validator::make($data, $rules);

        if($validation->fails()){
            throw new ValidationException($validation);
        }


        $complaint = new Complaint;
        $complaint->name = Input("name");
        $complaint->email = Input("email");
        $complaint->contact = Input("contact");
        $complaint->state_name = Input("state_name");
        $complaint->city = Input("city");
        $complaint->complaint_type = Input("complaint_type");
        $complaint->message = Input("message");
        $complaint->status = "pending";
        if(Input::file('receipt_id')){
            $complaint->file = Input::file('receipt_id');
        }
        $complaint->save();


        Flash::success('Your Complaint has been register...');
        
    }

}
