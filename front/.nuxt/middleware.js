const middleware = {}

middleware['checkSession'] = require('..\\middleware\\checkSession.js')
middleware['checkSession'] = middleware['checkSession'].default || middleware['checkSession']

middleware['isauthenticated'] = require('..\\middleware\\isauthenticated.js')
middleware['isauthenticated'] = middleware['isauthenticated'].default || middleware['isauthenticated']

export default middleware
