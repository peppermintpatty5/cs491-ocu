var express = require("express");
var router = express.Router();

router.get("/", function (req, res, next) {
  res.render("form", {});
});

router.post("/", (req, res, next) => {
  const username = req.body.username;
  res.send(`Welcome ${username}!`);
});

module.exports = router;
