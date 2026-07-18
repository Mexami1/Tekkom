<x-app-layout>

<div class="profile-page">

    <div class="profile-header">
        <h1>👤 Profil Saya</h1>
        <p>Kelola informasi akun dan keamanan akun Anda.</p>
    </div>

    <div class="profile-card">
        @include('profile.partials.update-profile-information-form')
    </div>

    <div class="profile-card">
        @include('profile.partials.update-password-form')
    </div>

    <div class="profile-card danger">
        @include('profile.partials.delete-user-form')
    </div>

</div>

</x-app-layout>

<style>

.profile-page{
    max-width:1000px;
    margin:auto;
    padding:35px;
}

.profile-header{
    margin-bottom:25px;
}

.profile-header h1{
    font-size:32px;
    color:#0f766e;
    font-weight:bold;
}

.profile-header p{
    color:#64748b;
    font-size:16px;
}

.profile-card{

    background:white;
    border-radius:18px;
    padding:35px;
    margin-bottom:25px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    border-top:6px solid #14b8a6;
}

.profile-card.danger{
    border-top:6px solid #ef4444;
}

</style>