import { ModuleWithProviders} from '@angular/core';
import { Routes, RouterModule, Router} from '@angular/router'; 

import { AppComponent } from './app.component';
import { OnamaComponent } from './onama/onama.component';
import { GalerijaComponent } from './galerija/galerija.component';
import { RezervacijaComponent } from './rezervacija/rezervacija.component';
import { KontaktComponent } from './kontakt/kontakt.component';
import { LoginComponent } from './login/login.component';

//export const router: Routes[
   // {path: '', redirectTo: 'onama', pathMatch: 'full'},
    [{path: 'onama', component: OnamaComponent},
    {path: 'galerija', component: GalerijaComponent},
    {path: 'rezervacija', component: RezervacijaComponent},
    {path: 'kontakt', component: KontaktComponent},
    {path: 'login', component: LoginComponent}
];