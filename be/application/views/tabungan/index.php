<!-- <form name="submit-to-google-sheet">
    <input name="nama" type="nama" placeholder="Nama" required>
    <input name="email" type="email" placeholder="Email" type="email" required>
    <input name="pesan" type="pesan" placeholder="Pesan" required>
    <button type="submit">Kirim</button>
</form> -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Tabungan</h4>
                    </div>
                    <div class="card-body">
                        <form name="submit-to-google-sheet">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nama" class="control-label">Nama</label>
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" id="nama" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pesn" class="control-label">Jumlah Tabungan</label>
                                    <div class="form-group">
                                        <input type="text" name="tabungan" class="form-control" id="tabungan" required />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Terima Kasih!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzRVgWrDOyd60-9OTMQFL8LKB7WepMtCD2jV6Jj0hvfhw2xULocAVELVnstgSANjXek/exec'
    const form = document.forms['submit-to-google-sheet'];
    const alert = document.querySelector('.alert');

    form.addEventListener('submit', e => {
        e.preventDefault();
        fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
            .then(response => {
                alert.classList.toggle('d-none');
                form.reset();
                console.log('Success!', response);
            })
            .catch(error => console.error('Error!', error.message))
    })
</script>