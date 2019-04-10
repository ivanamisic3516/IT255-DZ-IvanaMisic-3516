import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { OnamaComponent } from './onama/onama.component';
import { GalerijaComponent } from './galerija/galerija.component';
import { RezervacijaComponent } from './rezervacija/rezervacija.component';
import { KontaktComponent } from './kontakt/kontakt.component';
import { LoginComponent } from './login/login.component';
import { RouterModule, Routes } from '@angular/router';


const appRoutes: Routes = [
    {path: 'onama', component: OnamaComponent},
    {path: 'galerija', component: GalerijaComponent},
    {path: 'rezervacija', component: RezervacijaComponent},
    {path: 'kontakt', component: KontaktComponent},
    {path: 'login', component: LoginComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    OnamaComponent,
    GalerijaComponent,
    RezervacijaComponent,
    KontaktComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: true })
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
