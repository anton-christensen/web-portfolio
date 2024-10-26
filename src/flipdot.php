<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		html {
			background: #3c3c3c;
		}
		main {text-align: center;}
	</style>
</head>
<body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.min.js"></script>
<script type="text/javascript">
const RESOLUTION = 1;
const HEIGHT = Math.ceil(20 * RESOLUTION);
const WIDTH = Math.ceil(117 * RESOLUTION);
const CANVAS_MULTIPLIER = Math.floor(12 / RESOLUTION);

class Eye {
	constructor(x0, y0, x1, y1) {
    x0 = ceil(x0);
    y0 = ceil(y0);
    x1 = floor(x1);
    y1 = floor(y1);
		this.w = x1-x0;
		this.h = y1-y0;
		this.x0 = x0;
    this.y0 = y0;
    this.x1 = x1;
    this.y1 = y1;

		this.animator = new Animator();
	}

  update() {
    this.animState = this.animator.animate();
    return this.animState;
  }

  setState(animState) {
    this.animState = animState;
  }

  draw(pixbuf) {
    // propertyA = constrain(mouseX, 0, width);
    // propertyA = map(propertyA, 0, width, 0, 1);
    // propertyB = constrain(mouseY, 0, height);
    // propertyB = map(propertyB, 0, height, 0, 1);


    // lookX = propertyA;
    // lookY = propertyB;

    // animation
    {
      var almondOpenPercentage = this.animState.open;
      var pupilSize = this.animState.pupilSize;
      var lookX = this.animState.x;
      var lookY = this.animState.y;
    }
    
    let maxXDeviation = this.h/4;
    let maxYDeviation = this.h/4;
    lookX = (-0.5+lookX)*maxXDeviation;
    lookY = (-0.5+lookY)*maxYDeviation;
    
    // almond shape
    {
      var almondScale = 2;
      let r = this.h * almondScale;
      let maxOverlap = 1/(almondScale-0.05);
      let overlap = maxOverlap * almondOpenPercentage;
      var almondA = new Circle(this.x0 + this.w / 2, -0.45 + this.y0 + this.h / 2 - (1 - overlap / 2) * r, r);
      var almondB = new Circle(this.x0 + this.w / 2, -0.45 + this.y0 + this.h / 2 + (1 - overlap / 2) * r, r);
    }

    // iris
    {
      let r = this.h * 0.40;
      var iris = new Circle(this.x0 + this.w / 2 + lookX, this.y0 + this.h / 2 + lookY, r);
    }

    // pupil
    {
      let maxR = iris.r * 0.7;
      let minR = iris.r * 0.15;
      let r = map(pupilSize, 0, 1, minR, maxR);
      var pupil = new Circle(this.x0 + this.w / 2 + lookX, this.y0 + this.h / 2 + lookY, r);
    }


    // reflection
    {
      let r = 1;
      let offset = iris.r / 7 + iris.r / 7 * (1 + pupilSize) ** 2;
      var reflection = new Circle(this.x0 + this.w / 2 - offset + lookX, this.y0 + this.h / 2 - offset + lookY, r);
    }

    for (let x = this.x0; x < this.x1; x++) {
      for (let y = this.y0; y < this.y1; y++) {
        // if inside the almond
        if (almondA.covers(x, y) && almondB.covers(x, y)) {
          if (iris.covers(x, y)) {
            if (pupil.covers(x, y) || false && reflection.covers(x, y)) {
              pixbuf[x][y] = true;
            } else {
              pixbuf[x][y] = false;
            }
          } else {
            pixbuf[x][y] = true;
          }
        } else {
          pixbuf[x][y] = false;
        }
      }
    }
  }
}

class Circle {
  constructor(cx, cy, r) {
    this.cx = cx;
    this.cy = cy;
    this.r = r;
  }
  covers(x, y) {
    if ((this.cx - x) ** 2 + (this.cy - y) ** 2 <= this.r ** 2) {
      return true;
    }
    return false;
  }
}


const BLINKSTATE = {
  "open": 0,
  "closing": 1,
  "closed": 2,
  "opening": 3,
  "end": 4
}

const SEMISTABLESTATE = {
  "steady": 0,
  "changing": 1,
  "end": 4
}

class SemiStableBrownianProperty {
  constructor(
    initialVal,
    minTransitionTime,
    maxTransitionTime,
    maxStepSize,
    minSteadyTime,
    maxSteadyTime
  ) {
    this.val = initialVal;
    this.minTransitionTime = minTransitionTime*1000;
    this.maxTransitionTime = maxTransitionTime*1000;
    this.maxStepSize = maxStepSize;
    this.minSteadyTime = minSteadyTime*1000;
    this.maxSteadyTime = maxSteadyTime*1000;

    this._newSteadyState();
  }

  eval() {
    if (this.state.endTime <= millis()) {
      switch (this.state.state) {
        case SEMISTABLESTATE.steady:
          this._newTransitionState();
          break;
        case SEMISTABLESTATE.changing:
          this._newSteadyState();
          break;
      }
    }

    if(this.state.state == SEMISTABLESTATE.changing) {
      this.val = map(
        millis(), 
        this.state.startTime, this.state.endTime, 
        this.state.startVal, this.state.targetVal
      );
    }
    return this.val;
  }

  _newSteadyState() {
    let now = millis();
    this.state = {
      "state": SEMISTABLESTATE.steady,
      "startVal": this.val,
      "targetVal": this.val,
      "startTime": now,
      "endTime": now + random(this.minSteadyTime, this.maxSteadyTime)
    };
  }

  _newTransitionState() {
    let now = millis();
    this.state = {
      "state": SEMISTABLESTATE.changing,
      "startVal": this.val,
      "targetVal": constrain(this.val + random(-this.maxStepSize, this.maxStepSize), 0, 1),
      "startTime": now,
      "endTime": now + random(this.minTransitionTime, this.maxTransitionTime)
    };
  }
}

class Animator {
  constructor() {
    this.blinkState = {
      "state": BLINKSTATE.open,
      "tStart": 0,
      "tEnd": 0
    };
    this.tiredness = {
      "state": SEMISTABLESTATE.steady,
      "current_val": 1.0,
      "target_val": 1.0
    };

    this.tiredness = new SemiStableBrownianProperty(
      1.0, // initial val
      0.25, // min transition time
      1.5, // max transition time
      0.2, // max step size
      0, // min steady time
      10 // max steady time
    );

    this.pupilSize = new SemiStableBrownianProperty(
      0.5, // initial val
      0.25, // min transition time
      2, // max transition time
      0.6, // max step size
      0, // min steady time
      10 // max steady time
    );
    
    this.xPos = new SemiStableBrownianProperty(
      0.5, // initial val
      0.25, // min transition time
      1, // max transition time
      0.6, // max step size
      0, // min steady time
      10 // max steady time
    );
    
    this.yPos = new SemiStableBrownianProperty(
      0.5, // initial val
      0.25, // min transition time
      1, // max transition time
      0.6, // max step size
      0, // min steady time
      10 // max steady time
    );

    this.open = 1.0;
    // this.pupilSize = 0.5;

    this.blinkTime = 1;
  }

  animate() {
    return {
      "open": this.tiredness.eval(),
      "pupilSize": this.pupilSize.eval(),
      "x": this.xPos.eval(),
      "y": this.yPos.eval()
    };
  }
}



var pixbuf = [];
var lEye = undefined;
var rEye = undefined;

function setup() {
  createCanvas(WIDTH * CANVAS_MULTIPLIER, HEIGHT * CANVAS_MULTIPLIER);
  pixbuf = new Array(WIDTH);
  for (let x = 0; x < WIDTH; x++) {
    pixbuf[x] = new Array(HEIGHT);
  }
  frameRate(15);

  lEye = new Eye(0,      0,WIDTH/2,HEIGHT);
  rEye = new Eye(WIDTH/2,0,WIDTH,  HEIGHT);
}


function draw() {
  let s = lEye.update();
  rEye.setState(s);
  lEye.draw(pixbuf);
  rEye.draw(pixbuf);


  // DRAW
  background(60);
  noStroke();
  for (let x = 0; x < WIDTH; x++) {
    for (let y = 0; y < HEIGHT; y++) {

      fill(pixbuf[x][y] ? 255 : 0);
      circle(
        x * CANVAS_MULTIPLIER + CANVAS_MULTIPLIER / 2,
        y * CANVAS_MULTIPLIER + CANVAS_MULTIPLIER / 2,
        CANVAS_MULTIPLIER - 1
      );
    }
  }
}
</script>
</body>
</html>