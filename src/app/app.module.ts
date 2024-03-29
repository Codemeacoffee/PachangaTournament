import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BannerComponent } from './banner/banner.component';
import { SectionContainer } from './containers/section-container.component';
import { NavbarComponent } from './navigation/navbar.component';
import { PurpleArrowComponent } from './styling/arrows/purple-arrow/purple-arrow.component';
import { WhiteArrowComponent } from './styling/arrows/white-arrow/white-arrow.component';
import { GoogleMapsComponent } from './utils/google-maps.component';
import { SafePipe } from './utils/pipes/safe.pipe';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    BannerComponent,
    SectionContainer,
    PurpleArrowComponent,
    WhiteArrowComponent,
    GoogleMapsComponent,
    SafePipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
