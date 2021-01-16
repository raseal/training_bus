# Simple symfony app with buses
## Installation
- `make build`: only needed the first time (to create the environment)

*Please note the `build` action also starts the container!*

## Usage 
- `make start`: to turn on the environment once is created
- `make stop`: the opposite of `start` ^_^U
- `make destroy`: the opposite of `build`
- `make cc`: to clear app cache
- `make shell`: interactive shell with container app

## How to interact with the app
All interactions are available via browser at http://localhost:8000

| Route | Description | Used bus  |
| :---: | :---------: | :-------: |
| /     | Roll dice   | Query bus |


