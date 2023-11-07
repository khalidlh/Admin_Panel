<div class="row d-flex justify-content-center">
    <div class="col-xl-8 col-lg-7 ">
        <form wire:submit.prevent="Creat_graph">
            <table class="table table-striped ">
                <thead>
                    <th>mount</th>
                    <th>val1</th>
                    <th>val2</th>
                    <th>val3</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" wire:model='M1'>
                            @error('M1')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val1'>
                            @error('val1')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val2'>
                            @error('val2')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val3'>
                            @error('val3')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" wire:model='M2'>
                            @error('M2')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val4'>
                            @error('val4')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val5'>
                            @error('val5')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val6'>
                            @error('val6')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" wire:model='M3'>
                            @error('M3')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val7'>
                            @error('val7')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val8'>
                            @error('val8')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model='val9'>
                            @error('val9')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><button class="bt btn-warning form-control" type="submit">transforme</button></td>
                    </tr>
                </tbody>
                
            </table>
        </form>
    </div>
</div>