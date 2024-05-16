<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Bukti Booking</title>
    <style>
        .inline {
            display: inline-block;
        }

        table,
        tr,
        td {
            border: none;
        }
    </style>
</head>

<body>
    <div style="border-bottom: 1px solid gray;font-size: 8pt">
        <img src="{{ public_path('asset/image/logo-rsud-baubau.png') }}" alt="logo-rsud" width="50" height="50"
            style="position: absolute;">
        <div style="text-align: center;">
            <p style="font-size: 12pt">BADAN LAYANAN UMUM DAERAH RSUD KOTA BAUBAU</p>
            <p>Jln. Drs. H. La Ode Manarfa, BAUBAU 93727, SULAWESI TENGGARA</p>
            <p>(0402) 2825356,2825357, E-mail : rsudkotabaubau@gmail.com</p>
        </div>
    </div>

    <div style="margin-top: 20px; width: 100%; border-bottom:1px solid gray;">
        <p style="text-align: center;font-size:14pt;">Bukti Booking</p>
        <div style="margin-left:30%;margin-top: 40px; width: fit-content; padding: 5px;">
            <div>
                <table>
                    <tr>
                        <td>No. Booking</td>
                        <td> : {{ $data->no_booking }}</td>
                    </tr>
                    <tr>
                        <td>Tgl. Booking</td>
                        <td> : {{ $data->tanggal_booking }}</td>
                    </tr>
                    <tr>
                        <td>Tgl. Periksa</td>
                        <td> : {{ $data->tanggal }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : {{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td>No. Hp/Telephone</td>
                        <td> : {{ $data->no_telp }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : {{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : {{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Poliklinik</td>
                        <td> : {{ $data->poliklinik->nm_poli }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
