<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make(
            $request->all(),
            [
                'user_phone' => 'numeric|required',
                'quest_name' => 'required',
                'count_people' => 'numeric|required',
                'price' => 'numeric|required'
            ],
            [
                'user_phone.numeric' => 'Требуемый формат: 79998883322',
                'user_phone.required' => 'Поле с телефоном обязательно к заполнению',
                'quest_name.required' => 'Поле с названием квеста обязательно к заполнению',
                'count_people.numeric' => 'Требуемый формат: цифра',
                'count_people.required' => 'Поле с количеством участников обязательно к заполнению',
                'price.numeric' => 'Требуемый формат: например 6000'
            ]
        );
        if($errors->fails()){
            return response()->json([
                'errors' => $errors->errors()
            ], 422);
        }
        Order::make([
            'user_phone' => $request->user_phone,
            'user_mail' => $request->user_mail,
            'booking_time' => $request->booking_time,
            'quest_name' => $request->quest_name,
            'count_people' => $request->count_people,
            'price' => $request->price,
            'order_status' => 1,
        ])->save();

        return response()->json([
            'message' => 'все ок'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::where('id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return Order::
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
