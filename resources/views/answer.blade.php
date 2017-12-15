<html>
<?php
    public function show(Request $request, $id){
        $value = $request->session()->get('key');
        $data = $request->session()->all();
    }

?>
</html>
