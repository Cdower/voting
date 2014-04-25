VoteRPI
======

RPI student senate secure voting system designed to eventually meet the given Electronic Voting System Specifications:

Card-reader compatible
Touch-screen compatible
Very secure

Voter Side:
  Votes can only be made at the voting booths, nowhere else
  System should be able to handle several dozen voters simultaneously
  Some way of verifying that the voter is using their own RPI ID
  After receiving RIN number input, voter should receive choice of which class year to vote with: by credit or cohort (i.e. a 1st year with Sophomore standing should be able to vote as either a 1st year or a Sophomore)
  Require first and last names for write-ins
  Randomize the order of names for every voter.

RNE side:
  Loading a .csv or excel file containing all the RIN numbers should be relatively simple
  Candidate creation should be simple
  Every candidate should be connected to a RIN number
  The record of every vote should be connected to a time and RIN number
  Compile all the write-ins into a list for easy counting

For the Rules & Elections website (for continuation of the project):
  Possibly integrated with new voting system
  Mobile app that allows for tablets to be used for collecting signatures
