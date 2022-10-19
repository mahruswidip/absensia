<!--Modal Form Login with Avatar Demo-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="modal-body text-center mx-2 my-2">
                <h4 style="font-size: 1.5rem;">Sukses</h4>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal Form Login with Avatar Demo-->

<div class="row">
    <?php
    $attributes = array('id' => 'button'); ?>
    <form name="submit-to-google-sheet-absen">
        <div id="sourceSelectPanel" style="display:none">
            <label for="sourceSelect">Change video source:</label>
            <select id="sourceSelect" style="max-width:800px"></select>
        </div>
        <!-- <div>
        <video id="video" width="700" height="600" style="border: 1px solid gray"></video>
    </div> -->
        <textarea style="display: none;" name="uid" id="result" readonly></textarea>
        <span> <input style="display: none;" type="submit" id="button" class="btn btn-success btn-md" value="Cek Kehadiran"></span>
        <div class="col">
            <video id="video" width="550" height="420" style="border: 0.2rem solid grey; border-radius: 2rem;-webkit-transform: scaleX(-1);
  transform: scaleX(-1);"></video>
        </div>
    </form>
    <div class="col">
        <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
            <strong>Terima Kasih!</strong> Data Absen telah masuk di database
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/zxing/zxing.min.js"></script>
<script type="text/javascript">
    window.addEventListener('load', function() {
        $('#myModal').modal('hide')
        let selectedDeviceId;
        let audio = new Audio("assets/audio/beep.mp3");
        const codeReader = new ZXing.BrowserQRCodeReader()
        console.log('ZXing code reader initialized')
        codeReader.getVideoInputDevices()
            .then((videoInputDevices) => {
                const sourceSelect = document.getElementById('sourceSelect')
                selectedDeviceId = videoInputDevices[0].deviceId
                if (videoInputDevices.length >= 1) {
                    videoInputDevices.forEach((element) => {
                        const sourceOption = document.createElement('option')
                        sourceOption.text = element.label
                        sourceOption.value = element.deviceId
                        sourceSelect.appendChild(sourceOption)
                    })
                    sourceSelect.onchange = () => {
                        selectedDeviceId = sourceSelect.value;
                    };
                    const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                    sourceSelectPanel.style.display = 'block'
                }
                codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
                    console.log(result)
                    document.getElementById('result').textContent = result.text
                    var firstValue = document.getElementById('result').textContent = result.text;
                    if (result != null) {
                        audio.play();
                    }
                    $('#button').submit();
                    const scriptURL = 'https://script.google.com/macros/s/AKfycbxfFDLjFP8_DYVeb60IL_VapZ9LgiINxnD8j8Fl2ZfVV2Ys9CLRENAcILVOatiEBc-z-A/exec'
                    const form = document.forms['submit-to-google-sheet-absen'];
                    const alert = document.querySelector('.alert');
                    fetch(scriptURL, {
                            method: 'POST',
                            body: new FormData(form)
                        })
                        .then(response => {
                            alert.classList.toggle('d-none');
                            form.reset();
                            window.location.reload();

                            console.log('Success!', response);
                        })
                        .catch(error => console.error('Error!', error.message))

                }).catch((err) => {
                    console.error(err)
                    document.getElementById('result').textContent = err
                })
                console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
            })
            .catch((err) => {
                console.error(err)
            })

    })
</script>