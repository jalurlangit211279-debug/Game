public function systemWithdrawsAll(){
    $systems = SystemWithdraw::all();
    return response(['success' => true, 'systems' => $systems ]);
}


public function systemDepsAll(){
    $systems = SystemDep::where('off', 0)->get();
    return response(['success' => true, 'systems' => $systems ]);
}

public function randomAll(){
    $keys = RandomKey::all();
    return response(['success' => true, 'keys' => $keys ]);
}

public function statusAll(){
    $status = Status::all();
    return response(['success' => true, 'status' => $status ]);
}
public function repostAll(){
    $repost = Repost::all();
    return response(['success' => true, 'repost' => $repost ]);
}
public function getChartStat(){

}


}
