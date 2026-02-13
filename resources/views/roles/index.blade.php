<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Rôles - HOTELO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link rel="stylesheet" href="{{asset('')}}"> --}}
</head>
<body class="bg-slate-950 flex items-center justify-center min-h-screen p-6 font-sans">

    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl w-full max-w-4xl overflow-hidden">
        
        <div class="px-8 py-6 bg-white border-b border-slate-100 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight"></h1>
                <p class="text-slate-500 text-sm font-medium">Gestion des rôles et accès</p>
            </div>
            <a href="{{ route('role.create') }}" class="bg-blue-700 hover:bg-blue-800 text-white px-5 py-2.5 rounded-xl font-bold text-sm transition-all duration-300 shadow-lg shadow-blue-900/20 active:scale-95">
                + Nouveau Rôle
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">ID</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Nom du Rôle</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($roles as $role)
                    <tr class="hover:bg-blue-50/30 transition-colors duration-200">
                        <td class="px-8 py-5 text-sm font-semibold text-slate-400">
                            #{{ $loop->iteration }}
                        </td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-bold">
                                {{ $role->name }}
                            </span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex justify-end items-center space-x-4">
                                <a href="{{route('role.edit',$role->id)}}" class="text-slate-400 hover:text-blue-600 font-bold text-sm transition-colors">
                                    Modifier
                                </a>

                                <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-slate-400 hover:text-red-600 font-bold text-sm transition-colors bg-transparent border-none cursor-pointer p-0">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="px-8 py-4 bg-slate-50/50 border-t border-slate-100">
            <p class="text-xs text-slate-400 font-medium italic">
            </p>
        </div>
    </div>

</body>
</html>