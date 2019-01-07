<style>
    .check_error {
        color: #c00;
    }

    .check_ok {
        color: #080;
    }
</style>

<h2 style="text-align: center;">Kontrola</h2>

<table style="width: 100%; margin-bottom: 50px;">
    <tr>
        <td>Název aplikace:</td>
        <td>{{ env('APP_NAME') }}</td>
        <td>
            <span class="{{ env('APP_NAME') != 'Laravel' ? 'check_ok fas fa-check' : 'check_error fas fa-exclamation' }}"></span>
        </td>
    </tr>

    @php
        $connection_success = false;
        try {
            DB::connection()->getPdo();
            $connection_success = true;
        } catch (\Exception $e) {
        }
    @endphp

    <tr>
        <td>Připojení k databázi:</td>
        <td>{{ $connection_success ? 'OK' : 'Chyba připojení' }}</td>
        <td>
            <span class="{{ $connection_success ? 'check_ok fas fa-check' : 'check_error fas fa-exclamation' }}"></span>
        </td>
    </tr>
</table>