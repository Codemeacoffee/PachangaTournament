import { Component } from '@angular/core';

@Component({
  selector: 'tournament',
  templateUrl: './tournament.component.html',
  styleUrls: ['./tournament.component.css']
})
export class TournamentComponent {
    tournamentImg = {
        src : "assets/images/presentation.jpg",
        alt: "Alt"
    }
}
