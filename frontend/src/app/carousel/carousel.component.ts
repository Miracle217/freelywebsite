import { Component, OnInit, Input, trigger,keyframes, state, style, transition, animate } from '@angular/core';

@Component({
  selector: 'app-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.scss'],
  animations: [
   trigger('slideState', [
      state('in', style({transform: 'translateX(0)'})),
      transition('out => *', [
        animate(600, keyframes([
          style({opacity: 1, transform: 'translateX(-20px)', offset: 0}),
          style({opacity: 0.9, transform: 'translateX(0px)',  offset: 0.5}),
          style({opacity: 1, transform: 'translateX(0)',     offset: 1.0})
        ]))
      ]),
      transition('* => out', [
        animate(600, keyframes([
          style({opacity: 1, transform: 'translateX(0)',     offset: 0}),
          style({opacity: 0.9, transform: 'translateX(-20px)', offset: 0.5}),
          style({opacity: 1, transform: 'translateX(0px)',  offset: 1.0})
        ]))
      ])
    ])
  ]

})
export class CarouselComponent implements OnInit {

  @Input() slides:Array<any> = [];
  private activeSlide: number;

  constructor() { }

  ngOnInit() {
  }

}
