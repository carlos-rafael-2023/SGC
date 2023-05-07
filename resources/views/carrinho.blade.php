
@extends('layouts.app')

@section('content')
    <h1>Carrinho de Compras</h1>

    @if (count($carrinho) > 0)
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carrinho as $produto)
                    <tr>
                        <td>{{ $produto['nome'] }}</td>
                        <td>{{ $produto['marca'] }}</td>
                        <td>{{ $produto['preco'] }}</td>
                        <td>{{ $produto['quantidade'] }}</td>
                        <td>{{ $produto['total'] }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4">Total:</td>
                    <td>{{ array_sum(array_column($carrinho, 'total')) }}</td>
                </tr>
            </tbody>
        </table>
        <button type="button" onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>

    @else
        <p>O carrinho está vazio.</p>
    @endif
@endsection

<script>
    function adicionarAoCarrinho() {
        var produto = {
            nome: document.getElementById('produto').value,
            marca: document.getElementById('marca').value,
            preco: parseFloat(document.getElementById('preco').value),
            quantidade: parseInt(document.getElementById('quantidade').value),
            total: parseFloat(document.getElementById('total').innerHTML)
        };

        var carrinho = session('carrinho') || [];
        carrinho.push(produto);
        session(['carrinho' => $carrinho]);
    }
</script>

