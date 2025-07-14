<?= view('layouts/alert') ?>
public function logout()
{
    session()->destroy();
    return redirect()->to('/login')->with('success', 'Anda berhasil logout.');
}