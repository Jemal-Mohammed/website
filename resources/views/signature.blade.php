<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signature</title>
</head>

<body>
    <!-- signature.blade.php -->
    <div>
        <canvas style="background-color: aquamarine" id="signatureCanvas" width="400" height="200"></canvas>
        <button id="clearSignature">Clear Signature</button>
        <button id="saveSignature">Save Signature</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('signatureCanvas');
            const signaturePad = new SignaturePad(canvas);

            document.getElementById('clearSignature').addEventListener('click', () => {
                signaturePad.clear();
            });

            document.getElementById('saveSignature').addEventListener('click', () => {
                const signatureData = signaturePad.toDataURL();

                // Include CSRF token in the headers
                const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

                axios.post('/save-signature', {
                        signatureData
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        }
                    })
                    .then(response => {
                        console.log(response.data);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });

        });
    </script>
</body>

</html>
