<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lampiran Sipmen Dokumen PAPI C2 LF SP2020 SUMSEL</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans';
        }

        .judul {
            width: 100%;
            font-size: 14px;
            margin-left: 20px;
            margin-right: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .content {
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .table_lampiran {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
            font-size: 18px;
            text-align: left;
            width: 100%;
        }

        .table_lampiran td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 2px;
            font-size: 14px;
            /* text-align: left; */
            width: 100%;
        }

        .table_lampiran th {
            border-collapse: collapse;
            border: 1px solid black;
            /* padding: 5px; */
            font-size: 14px;
            /* text-align: left; */
            width: 100%;
        }

        .header {
            border-collapse: collapse;
            border: 0px none;
            text-align: center;
            width: 100%;
            padding: 5px;
            font-size: 18px;
        }

        th.lima {
            width: 5%;
            text-align: left;
            border-collapse: collapse;
            border: 2px solid black;
            padding: 5px;
        }

        th.dua {
            width: 25%;
            text-align: left;
            border-collapse: collapse;
            border: 2px solid black;
            padding: 5px;
        }

        th.tiga {
            width: 40%;
            text-align: left;
            border-collapse: collapse;
            border: 2px solid black;
            padding: 5px;
        }
    </style>

</head>

<body>
    <div class="reset">
        <div class="judul">
            <table class="header">
                <tr>
                    <td>
                        <img src="{{ public_path('images/logo-bps.svg') }}" style="width: 2.5cm; margin-bottom: 4px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p><strong>BADAN PUSAT STATISTIK</strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            <strong>PROVINSI SUMATERA SELATAN</strong>
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="content">
            <table style="padding: 5px">
                <tr>
                    <td>
                        <strong>Lampiran</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Nomor Surat</strong>
                    </td>
                    <td>
                        <strong style="padding: 4px">:</strong>
                    </td>
                    <td>
                        <strong>{{ $nomor_surat }}</strong>
                    </td>
                </tr>
            </table>
            <p style="text-align: justify; padding: 5px;"> Berikut ini merupakan lampiran daftar dokumen C2 sample rumah
                tangga yang dikirimkan ke BPS Provinsi Sumatera Selatan. Dengan rincian wilayah tugas sebagai berikut:
            </p>

            <table style="padding: 5px">
                <tr>
                    <td>Kabupaten</td>
                    <td style="padding: 4px">:</td>
                    <td>{{ '(16' . $data_kab->kode_kab . ') ' . $data_kab->nama_kab }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td style="padding: 4px">:</td>
                    <td>{{ '(' . $data_kec->kode_kec . ') ' . $data_kec->nama_kec }}</td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td style="padding: 4px">:</td>
                    <td>{{ '(' . $data_desa->kode_desa . ') ' . $data_desa->nama_desa }}</td>
                </tr>
                <tr>
                    <td>Nomor Blok Sensus</td>
                    <td style="padding: 4px">:</td>
                    <td>{{ $nbs }}</td>
                </tr>
            </table>

            <p style="text-align: center; margin-top: 8px; margin-bottom: 2px">
                <strong><u>Tabel Daftar Sample Rumah Tangga</u></strong>
            </p>

            <table class="table_lampiran">
                <thead>
                    <tr>
                        <th style="width: 40%;">No DSRT</th>
                        <th style="width: 40%;">NUS</th>
                        <th>Nama SLS</th>
                        <th>Nama KRT</th>
                        <th>Status Dokumen</th>
                        <th>Status Response</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dsrt)
                        <tr>
                            <td style="width: 40%; text-align: right">{{ $dsrt->no_dsrt }}</td>
                            <td style="width: 40%; text-align: right">{{ $dsrt->nus }}</td>
                            <td style="text-align: center">{{ $dsrt->nama_sls }}</td>
                            <td style="text-align: center">{{ $dsrt->nama_krt }}</td>
                            <td style="text-align: center">
                                @if ($dsrt->status_dikirim == 0)
                                    {{ 'Tidak ada' }}
                                @else
                                    {{ 'Ada' }}
                                @endif
                            </td>
                            <td style="text-align: center">
                                @if ($dsrt->status_response == 0)
                                    {{ 'Non response' }}
                                @else
                                    {{ 'Response' }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
