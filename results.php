<?php
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECOT - Results</title>
    <link rel="stylesheet" href="css/results.css" />


    <!-- include header here -->
    <?php
    require_once('templates/header.php');
    ?>



    <section class="form-section">
        <h2>Information on High School Results</h2>
        <div class="highschool-form">
            <table>
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Syllabus</th>
                        <th>Grading</th>
                        <th>Year Written</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>ENGLISH AS A FIRST LANGUAGE</option>
                                <option>ENGLISH AS A SECOND LANGUAGE</option>
                                <option>ENGLISH LITERATURE</option>
                                <option>RELIGIOUS EDUCATION</option>
                                <option>HISTORY</option>
                                <option>GEOGRAPHY</option>
                                <option>FRENCH</option>
                                <option>SISWATI</option>
                                <option>PHYSICS</option>
                                <option>MATHEMATICS</option>
                                <option>AGRICULTURE</option>
                                <option>CHEMISTRY</option>
                                <option>BIOLOGY</option>
                                <option>PHYSICAL SCIENCE</option>
                                <option>LIFE SCIENCES</option>
                                <option>SCIENCE (CHEMISTRY-BIOLOGY)</option>
                                <option>COMBINED SCIENCE</option>
                                <option>DESIGN & TECHNOLOGY</option>
                                <option>METAL WORK</option>
                                <option>TECHNICAL DRAWING</option>
                                <option>WOOD WORK</option>
                                <option>FASHION & FABRIC</option>
                                <option>HOME ECONOMICS/ CONSUMER SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ACCOUNTS</option>
                                <option>BUSINESS STUDIES</option>
                                <option>ECONOMICS</option>
                                <option>INFORMATION TECHNOLOGY</option>
                                <option>MATHEMATICAL LITERACY</option>
                                <option>LIFE ORIENTATION</option>
                                <option>TOURISM</option>
                                <option>ENTREPRENEURSHIP</option>
                                <option>TECHNICAL STUDIES</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>IGCSE/SGCSE</option>
                                <option>HIGCSE</option>
                                <option>SOUTH AFRICAN SENIOR CERTIFICATE</option>
                                <option>G.C.E. (LONDON)</option>
                                <option>CAMBRIDGE O'LEVEL</option>
                            </select></td>

                        <td><select>
                                <option selected disabled>Select</option>
                                <option>A*</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select></td>
                        <td><select>
                                <option selected disabled>Select</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group" style="background-color: #f1f1f1; padding:5px; border-radius: 5px; width: fit-content;">
                <label for="passport-photo">Results</label>
                <input type="file" id="passport-photo" accept="image/*" />
                <!---- <small>Less than 2MB</small> -->
            </div>

            <div class="note">
                <p>
                    <strong>Note:</strong> Please select your best 6 subjects, the first 2 being the two core subjects for your course, followed by 2 other credits. Then lastly any other 2 credits or passes. Please state the syllabus for each subject, grade, and the year written.
                </p>
            </div>

            <!-- TODO: disable save and continue  if form validation is false-->
            <div class="buttons-section">
                <a href="prevEducation.php">
                    <button>BACK</button>
                </a>
                <button class="save-btn">SAVE</button>
                <a href="uploadDocs.php">
                    <button class="continue-btn">CONTINUE</button>
                </a>
            </div>
    </section>
    <!--Button section-->

    <?php
    // require_once("templates/footer.php");
    ?>

    <?php
    require_once('templates/applicationFooter.php');
    ?>

    </body>

</html>