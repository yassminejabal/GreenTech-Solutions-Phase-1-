<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Rôle - HOTELO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 flex items-center justify-center h-screen m-0 font-sans">

    <div class="bg-white/95 backdrop-blur-sm p-10 rounded-3xl shadow-[0_20px_50px_rgba(0,_0,_0,_0.3)] w-full max-w-md border border-slate-800/10">

        <div class="text-center mb-10">
            <h1 class="text-4xl font-black text-slate-900 tracking-tight">greeh</h1>
            <div class="h-1 w-12 bg-blue-600 mx-auto mt-2 rounded-full"></div>
            <!-- <p class="text-slate-500 mt-4 font-medium uppercase text-xs tracking-widest">Administration</p> -->
        </div>

        <form action="{{ route('role.update',$role->id) }}" method="POST" class="space-y-8">
            @csrf 
            @method('PUT')
            <div class="relative">
                <label for="name" class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-2 block ml-1">Nom du Rôle</label>
                
                <input type="text" name="name" value="{{$role->name}}" id="name" placeholder="ex: Admin, Réceptionniste..." required
                    class="w-full px-5 py-4 bg-slate-50 rounded-2xl border-2 border-transparent focus:border-blue-600 focus:bg-white outline-none transition-all duration-300 text-slate-800 shadow-sm placeholder-slate-400">
            </div>
            <div class="grid grid-cols-2 gap-4">
                 @foreach($permesstions as $permission)
                <div class="flex items-center space-x-3">
                   <input type="checkbox" name="permission_id[]" value="{{$permission->id}}"
                    class="h-5 w-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500 cursor-pointer">
                 <label class="text-slate-700">{{$permission->name}}</label>
                </div>
                 @endforeach
            </div>

            <button type="submit"
                class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-900/20 transform transition-all duration-300 hover:-translate-y-1 active:scale-95 text-lg">
                Créer le Rôle
            </button>
        </form>

        <div class="mt-8 text-center">
            <a href="{{route('role.index')}}" class="text-sm font-semibold text-slate-400 hover:text-blue-600 transition-colors duration-300">
                ← Annuler et retourner
            </a>
        </div>
    </div>

</body>

</html>