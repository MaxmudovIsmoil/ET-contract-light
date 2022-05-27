<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{

    static private function getContracts()
    {
        $user = Auth::user();
        $user->load('section');

        if ($user->section->rule != 'USER') {
            $permission = explode(';', $user->section->permission);
            $contracts = Contract::whereIn('user_id', $permission)
                ->where('deleted_at', NUll)
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        else {
            $contracts = Contract::where(['user_id' => $user->id, 'deleted_at' => NUll])
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        $contracts->load('user', 'jurist');

        return $contracts;
    }


    public function index()
    {
        $contracts = self::getContracts();

        return view('contract.index', compact('contracts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);

        return view('contract.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);

        return view('contract.edit', compact('contract'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $c = Contract::findOrFail($id);
            $c->fill(['deleted_at' => date('Y-m-d H:i:s')]);
            $c->save();

            return response()->json(['status' => true, 'id' => $id]);
        }
        catch (\Exception $exception) {

            if ($exception->getCode() == 23000) {
                return response()->json(['status' => false, 'errors' => 'The data used cannot be deleted.']);
            }

            return response()->json([
                'status' => false,
                'errors' => $exception->getMessage()
            ]);
        }
    }
}
