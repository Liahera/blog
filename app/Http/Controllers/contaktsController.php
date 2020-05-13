<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contakts;
class contaktsController extends Controller{
    public function submit(ContactRequest $reg){
        //dd($reg->input('subject'));
        //$validation=$reg->validate([
           // 'subject'=>'required|min:5|max:50',
          //  'massage'=>'required|min:15|max:100'
        //]);
        $contact= new Contakts();
        $contact->name=$reg->input('name');
        $contact->email=$reg->input('email');
        $contact->subject=$reg->input('subject');
        $contact->message=$reg->input('message');

        $contact->save();

        return redirect()->route('welcome')->with('success','Сообщение было добавлено');
    }
    public function allData(){
        $contact= new Contakts();
        //orderBy('id','asc')->take(3)->get()
        return view('messages',['data'=>$contact->orderBy('id','desc')->take(3)->get()]);
    }
    public function showOneMessage($id) {
        $contact= new Contakts();
        return view('one-message',['data'=>$contact->find($id)]);
    }
    public function updateMessage($id){
        $contact= new Contakts();
        return view('update-message',['data'=>$contact->find($id)]);
    }
    public function updateMessageSubmit($id,ContactRequest $reg){
        //dd($reg->input('subject'));
        //$validation=$reg->validate([
        // 'subject'=>'required|min:5|max:50',
        //  'massage'=>'required|min:15|max:100'
        //]);
        $contact=  Contakts::find($id);
        $contact->name=$reg->input('name');
        $contact->email=$reg->input('email');
        $contact->subject=$reg->input('subject');
        $contact->message=$reg->input('message');

        $contact->save();

        return redirect()->route('contakts-data-one',$id)->with('success','Сообщение было обновлено');
    }
    public function deleteMessage($id){
        Contakts::find($id)->delete();
        return redirect()->route('contakts-data')->with('success','Сообщение было удалено');
    }
}
