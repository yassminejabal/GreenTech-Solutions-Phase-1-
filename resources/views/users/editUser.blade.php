<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur - HOTELO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 flex items-center justify-center min-h-screen p-6 font-sans">

    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl w-full max-w-md overflow-hidden">
        
        <div class="px-8 py-6 bg-white border-b border-slate-100 text-center">
            <h1 class="text-2xl font-black text-slate-900 tracking-tight">Modifier Membre</h1>
            <p class="text-slate-500 text-sm font-medium italic">Mise à jour des informations</p>
        </div>

        <form action="{{ route('user.update', $user->id) }}" method="POST" class="p-8 space-y-6">
            @csrf
            @method('PUT') <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-2 ml-1">Nom Complet</label>
                <input type="text" name="name" value="{{ $user->name }}" required
                    class="w-full px-4 py-3 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-600 focus:bg-white outline-none transition-all duration-300 text-slate-800 shadow-sm">
            </div>
            <div>
    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Nouveau mot de passe (laisser vide pour ne pas changer)</label>
    <input type="password" name="password" 
        class="w-full px-4 py-3 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-600 outline-none">
</div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-2 ml-1">Adresse Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required
                    class="w-full px-4 py-3 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-600 focus:bg-white outline-none transition-all duration-300 text-slate-800 shadow-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-2 ml-1">Attribuer un Rôle</label>
                <select name="role" class="w-full px-4 py-3 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-600 focus:bg-white outline-none transition-all duration-300 text-slate-800 shadow-sm appearance-none">
                    {{-- @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                            {{ ($role->name) }}
                        </option>
                    @endforeach --}}
                </select>
            </div>

            <div class="pt-4">
                <button type="submit" 
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-900/20 transform transition-all duration-300 hover:-translate-y-1 active:scale-95 text-lg">
                    Sauvegarder les modifications
                </button>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('user.index') }}" class="text-xs font-bold text-slate-400 hover:text-blue-600 transition-colors uppercase tracking-widest">
                    Annuler
                </a>
            </div>
        </form>
    </div>

</body>
</html>