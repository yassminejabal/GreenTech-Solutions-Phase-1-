<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs - HOTELO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 flex items-center justify-center min-h-screen p-6 font-sans">

    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl w-full max-w-5xl overflow-hidden">
        
        <div class="px-8 py-6 bg-white border-b border-slate-100 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight italic">HOTELO</h1>
                <p class="text-slate-500 text-sm font-medium">Gestion des utilisateurs</p>
            </div>
            <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest border border-blue-100">
                {{ count($users) }} Membres
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Utilisateur</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Email</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Rôle</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($users as $user)
                    <tr class="hover:bg-blue-50/40 transition-colors duration-200">
                        <td class="px-8 py-5">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm shadow-md uppercase">
                                    {{ substr($user->name, 0, 1) }}
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-slate-900">{{ $user->name }}</div>
                                    <div class="text-[10px] text-slate-400 font-mono">ID: #{{ $user->id }}</div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-8 py-5 text-sm text-slate-600 font-medium italic">
                            {{ $user->email }}
                        </td>

                        <td class="px-8 py-5">
                            @forelse($user->roles as $role)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700 uppercase border border-blue-200">
                                    {{ $role->name }}
                                </span>
                        </td>

                        <td class="px-8 py-5 text-right">
                            <div class="flex justify-end space-x-2">
                                <a href="{{ route('', $user->id) }}" class="p-2 hover:bg-slate-100 rounded-lg transition-colors group" title="Modifier">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>

                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 hover:bg-red-50 rounded-lg transition-colors group" title="Supprimer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="px-8 py-4 bg-slate-50/50 text-center border-t border-slate-100">
             <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Base de données HOTELO - 2026</p>
        </div>
    </div>

</body>
</html>